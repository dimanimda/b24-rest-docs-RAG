(function(){
  const idx = window.__REST_INDEX__ || { methods: [] };
  const listEl = document.getElementById('list');
  const scopeSel = document.getElementById('scope');
  const q = document.getElementById('q');
  const flagDep = document.getElementById('flag-deprecated');
  const flagEx = document.getElementById('flag-example');
  const pagSel = document.getElementById('pagination');
  const clearBtn = document.getElementById('clear');

  if (!listEl) return; // method page

  const scopes = Array.from(new Set(idx.methods.map(m=>m.scope))).sort();
  scopes.forEach(s=>{ const o=document.createElement('option'); o.value=s; o.textContent=s; scopeSel.appendChild(o); });

  function render(){
    const term = (q.value||'').toLowerCase().trim();
    const scope = scopeSel.value||'';
    const needDep = flagDep.checked;
    const needEx = flagEx.checked;
    const pag = pagSel.value||'';
    const ul = document.createElement('ul');
    const items = idx.methods.filter(m=>{
      if (scope && m.scope!==scope) return false;
      if (pag && (m.pagination||'')!==pag) return false;
      if (needDep && !m.deprecated) return false;
      if (needEx && !m.has_example) return false;
      if (term && m.method.toLowerCase().indexOf(term)===-1) return false;
      return true;
    }).slice(0, 5000);
    items.forEach(m=>{
      const li = document.createElement('li');
      const a = document.createElement('a');
      const base = (window.__WEB_DIR__||'').replace(/\/$/,'');
      a.href = (base? base : '') + '/method/' + encodeURIComponent(m.method);
      const flags = [];
      if (m.deprecated) flags.push('deprecated');
      if (m.pagination) flags.push(m.pagination);
      if (m.has_example) flags.push('example');
      a.textContent = m.method + (flags.length? ' ['+flags.join(', ')+']' : '');
      li.appendChild(a); ul.appendChild(li);
    });
    listEl.innerHTML = '';
    listEl.appendChild(ul);
  }

  q.addEventListener('input', render);
  scopeSel.addEventListener('change', render);
  flagDep.addEventListener('change', render);
  flagEx.addEventListener('change', render);
  pagSel.addEventListener('change', render);
  clearBtn.addEventListener('click', ()=>{ q.value=''; scopeSel.value=''; flagDep.checked=false; flagEx.checked=false; pagSel.value=''; render();});
  render();
})();


